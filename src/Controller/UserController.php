<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class UserController
{
    public function index(): Response
    {

        switch (rand(0, 4)) {
            case 0:
                $text = $this->getCaseZero();
                break;
            case 1:
                $text = $this->getCaseOne();
                break;
            case 2:
                $text = $this->getCaseTwo();
                break;
            case 3:
                $text = $this->getCaseThree("expected int");
                break;
            case 4:
                return new Response('ok');
        }
    }

    private function getCaseOne(): int
    {
        return "text1";
    }

    /**
     * @return int
     */
    private function getCaseTwo(): string
    {
        return "text2";
    }

    private function getCaseThree(int $text): string
    {
        return (string)$text;
    }
}
