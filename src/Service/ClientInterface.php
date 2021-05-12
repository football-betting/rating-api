<?php declare(strict_types=1);

namespace App\Service;

use Symfony\Contracts\HttpClient\ResponseInterface;

interface ClientInterface
{
    /**
     * @param bool $live
     *
     * @return array
     */
    public function __invoke(bool $live): array;
}
