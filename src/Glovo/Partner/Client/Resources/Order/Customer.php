<?php
/**
 * Description of Customer.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Order;

use Dots\Data\DTO;

class Customer extends DTO
{
    protected ?string $name;

    protected ?string $phone_number;

    protected ?string $hash;

    protected ?InvoicingDetails $invoicing_details;

    public static function fromArray(array $data): static
    {
        if (isset($data['invoicing_details'])) {
            $data['invoicing_details'] = InvoicingDetails::fromArray($data['invoicing_details']);
        }

        return parent::fromArray($data);
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function getInvoicingDetails(): ?InvoicingDetails
    {
        return $this->invoicing_details;
    }
}
