<?php

namespace m4grio\SepomexBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Sepomex Controller
 *
 * @package m4grio\SepomexBundle\Controller
 * @author  Mario Álvarez <ahoy@m4grio.me>
 */
class SepomexController extends Controller
{
    /**
     * Allow to fetch all Sepomex data related to a postal code
     *
     * @param  $postalCode
     *
     * @return JsonResponse
     *
     * @Route("/sepomex/{postalCode}", name="m4grio_sepomex_service")
     * @Method({"GET"})
     */
    public function searchByPostalCodeAction($postalCode)
    {
        /** @var JsonResponse $response */
        $response = $this->getDefaultResponse();
        $repository = 'm4grioSepomexBundle:Sepomex'/*$this->container->getParameter('repo')*/;
        $result = $this->getDoctrine()
            ->getRepository($repository)
            ->findByDCodigo($postalCode)
        ;

        if ($result) {
            $response->setData($result)
                ->setStatusCode(200)
            ;
        }

        return $response;
    }

    /**
     * Generate a default empty response
     *
     * @return JsonResponse
     */
    private function getDefaultResponse()
    {
        $response = (new JsonResponse)
            ->setStatusCode(404)
            ->setData(['errors' => ['Postal code not found.']])
        ;

        return $response;
    }
}
