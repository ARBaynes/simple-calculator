<?php

namespace App\Controller;

use App\Service\Calculate;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CalculatorController extends AbstractController
{
    /**
     * @Route("/calculator", name="calculator_index")
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function index(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('operand_1', IntegerType::class)
            ->add('operator', ChoiceType::class, ['choices'  => [
                '+' => '+',
                '-' => '-',
                '*' => '*',
                '/' => '/']
            ])
            ->add('operand_2', IntegerType::class)
            ->add('submit', SubmitType::class, ['label' => 'Calculate'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $operand_1 = $form->get('operand_1')->getData();
            $operand_2 = $form->get('operand_2')->getData();
            $operator = $form->get('operator')->getData();

            $result = Calculate::compute($operand_1, $operand_2, $operator);

            $this->addFlash(
                'info',
                $operand_1 . ' ' . $operator . ' ' . $operand_2 . ' = ' . $result
            );

            return $this->redirectToRoute('calculator_index');
        }

        return $this->render('calculator.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}