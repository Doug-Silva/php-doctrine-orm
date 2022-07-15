<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

//adicionar aluno
$aluno = new Aluno();
$aluno->setNome('Vinicius Dias');

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

//persistir no banco de dados
$entityManager->persist($aluno);

$entityManager->flush();