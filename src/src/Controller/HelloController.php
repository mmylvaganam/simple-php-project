<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route('/hello', name: 'hello_world')]
    public function hello(): Response
    {
        return $this->render('hello.html.twig', ['message' => 'Hello, World!']);
    }

//    #[Route('/user/{id}', name: 'user_name')]
//    public function getUser(int $id, UserRepository $userRepository): Response
//    {
//        $user = $userRepository->find($id);
//
//        if (!$user) {
//            throw $this->createNotFoundException('User not found');
//        }
//
//        return $this->render('user.html.twig', ['name' => $user->getName()]);
//    }
}
