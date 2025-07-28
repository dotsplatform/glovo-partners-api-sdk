<?php
/**
 * Description of GetAddressesResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses;

use Dots\Glovo\Laas\Client\Resources\Addresses\Addresses;
use Dots\Glovo\Laas\Client\Resources\Addresses\AddressesPagination;

class GetAddressesResponseDTO extends GlovoResponseDTO
{
    protected AddressesPagination $pagination;

    protected array $data;

    public function getPagination(): AddressesPagination
    {
        return $this->pagination;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getAddresses(): Addresses
    {
        return Addresses::fromArray($this->getData()['addresses']);
    }
}
