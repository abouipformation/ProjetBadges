<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Annonce;
use AppBundle\Form\AnnonceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class BadgeController extends Controller
{
    /**
     * @Route("/annonce", name="annonce",
     * options={"expose"=true})
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function annonceAction(Request $request)
    {
        $annonce = new Annonce();
        $form_annonce =  $this->createForm(AnnonceType::class, $annonce, []);
        $form_annonce->handleRequest($request);

        if($form_annonce->isSubmitted() && $form_annonce->isValid()) {
            $this->container->get('annonce')->saveAnnonce($annonce);
            $this->addFlash('success', 'ajout effectué avec succes');
        }

        return $this->render('Badge/annonce.html.twig', array('form_annonce' => $form_annonce->createView()));
    }

    /**
     * @Route("/offre", name="offre",
     * options={"expose"=true})
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function offreAction(Request $request)
    {


    }

    /**
     * @Route("/demande", name="demande",
     * options={"expose"=true})
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function demandeAction(Request $request)
    {

    }



}