<?php
namespace Tyre\TyreBundle\Repository;

interface ProductRepositoryInterface
{
    function search(string $needle);
}
