<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

use App\Repository\ProjetRepository;
use App\Entity\Projet;
use App\Form\ProjetType;
use App\Entity\Images;


class FolioController extends AbstractController
{
    /**
     * @Route("/folio", name="folio")
     */
    public function index(ProjetRepository $repo): Response
    {
        // $repo = $this->getDoctrine()->getRepository(Article::class);
        $repo = $this->getDoctrine()->getRepository(Projet::class);

        // $articles = $repo->findAll();
        $projets = $repo->findAll();

        return $this->render('folio/index.html.twig', [
            'controller_name' => 'FolioController',
            // 'articles' => $articles,
            'projets' => $projets
        ]);
    }

     /**
     * @Route("/admin", name="folio_admin")
     */
    public function admin(ProjetRepository $repo): Response{

        $repo = $this->getDoctrine()->getRepository(Projet::class);

        // $articles = $repo->findAll();
        $projets = $repo->findAll();

        return $this->render('folio/admin.html.twig', [
            'controller_name' => 'FolioController',
            'projets' => $projets
        ]);
    }
    

    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('folio/home.html.twig' , [
            'title' => "Bienvenue sur mon portfolio !",
            'age'   => 31,
        ]);
    }

    /**
     * @Route("/folio/new", name="folio_create")
     * @Route("/folio/{id}/edit", name="folio_edit")
     */
    public function form(Projet $projet = null, Request $request, EntityManagerInterface $manager){

        if(!$projet){
            $projet = new Projet();
        }
        
        $form = $this->createForm(ProjetType::class, $projet);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if(!$projet->getId()){
                $projet->setCreatedAt(new \DateTimeImmutable());
            }

            $manager->persist($projet);
            $manager->flush();

            return $this->redirectToRoute('folio_show', ['id' => $projet->getId()]);
        }

        return $this->render('folio/create.html.twig', [
            'formProjet' => $form->createView(),
            'editMode' => $projet->getId() !== null
        ]);
    }

    /**
     * @Route("/folio/{id}", name="folio_show")
     */
    public function show(Projet $projet){
        
        return $this->render('folio/show.html.twig', [
            'projet' => $projet
        ]);
    }

    /**
     * @Route("/delete/{id}/", name="folio_delete")
     */
    public function delete(Projet $projet){

        $em = $this->getDoctrine()->getManager();
        $em->remove($projet);
        $em->flush();

        $this->addFlash('success', 'Projet supprimé avec succès');
        return $this->redirectToRoute('folio_admin');

    }

   

    
    
}
