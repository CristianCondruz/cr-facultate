<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CadreDidacticeCursuri;
use AppBundle\Entity\SituatieScolara;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

  /**
   * @Route("/", name="homepage")
   */
  public function indexAction(Request $request) {
    $em = $this->getDoctrine()->getManager();

    $anunturis = $em->getRepository('AppBundle:Anunturi')->findAll();

    return $this->render('anunturi/dashboard_anunturi.html.twig', [
      'anunturis' => $anunturis,
    ]);
  }

  /**
   * @Route("/adaugare-note", name="adaugare-note")
   * @param \Symfony\Component\HttpFoundation\Request $request
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function AdaugareNotaAction(Request $request) {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

    $params = $request->request->all();

    $form = $this->createFormBuilder($params)
      ->add('nota', IntegerType::class, $options = ['required' => TRUE])
      ->add('date', DateType::class, $options = ['required' => TRUE])
      ->add('materie', EntityType::class, [
        'class' => 'AppBundle:ProgramaScolara',
        'choice_label' => 'nume_curs'
      ], $options = ['required' => TRUE])
      ->add('student', EntityType::class, [
        'class' => 'AppBundle:Student',
        'choice_label' => 'nume'
      ], $options = ['required' => TRUE])
      ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $data = $form->getData();
      $cadru_didactic = $this->getUser();
      $entityManager = $this->getDoctrine()->getManager();
      $programaScoalara = $data['materie'];
      $student = $data['student'];
      $student_serie = $student->getSerie();

      $cadreDidacticCursuriRepo = $this->getDoctrine()->getRepository('AppBundle:CadreDidacticeCursuri');
      $cadreDidacticCursuri = $cadreDidacticCursuriRepo->findBy([
        'id_cadre_didactice' => $cadru_didactic->getId(),
        'id_programa_scolara' => $programaScoalara->getId(),
      ]);

      $cadreDidacticCursuriData = $cadreDidacticCursuri[0];

      $cadreDidacticSerieRepo = $this->getDoctrine()->getRepository('AppBundle:CadreDidacticeSerie');
      $cadreDidacticSerie = $cadreDidacticSerieRepo->findBy([
        'id_cadre_didactice_cursuri' => $cadreDidacticCursuriData->getId(),
        'id_serie' => $student_serie->getId()
      ]);

      $nota = new SituatieScolara();
      $nota->setData($data['date']);
      $nota->setNota($data['nota']);
      $nota->setStudent($student);
      $nota->setCadruDidactic($cadreDidacticSerie[0]);

      $entityManager->persist($nota);
      $entityManager->flush();

    }

    return $this->render('adaugare_note.html.twig', [
      'form' => $form->createView()
    ]);
  }

  /**
   * @Route("/situatie-scoalara", name="situatie-scoalara")
   * @param \Symfony\Component\HttpFoundation\Request $request
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function SituatieScolaraAction(Request $request) {
    $headers = [
      'Nr. crt', 'Student', 'Nota', 'Data'
    ];

    $situatieScolaraRepo = $cadreDidacticSerieRepo = $this->getDoctrine()->getRepository('AppBundle:SituatieScolara');
    $situatii = $situatieScolaraRepo->findAll();


    return $this->render('situatie_scoalara.html.twig', [
      'headers' => $headers,
      'situatii' => $situatii
    ]);
  }
}
