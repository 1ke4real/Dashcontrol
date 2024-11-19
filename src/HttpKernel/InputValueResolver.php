<?php

declare(strict_types=1);

namespace App\HttpKernel;

use App\Resolver\Contract\InputValueResolverInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
use Symfony\Component\Serializer\SerializerInterface;

class InputValueResolver implements ValueResolverInterface
{
    private SerializerInterface $serializer;

    public function __construct(
        SerializerInterface $serializer,
    ) {
        $this->serializer = $serializer;
    }

    /**
     * @return iterable<InputValueResolverInterface>
     */
    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        if (!class_exists($argument->getType()) || !is_subclass_of($argument->getType(), InputValueResolverInterface::class)) {
            return [];
        }
        $value = $this->serializer->deserialize($request->getContent(), $argument->getType(), 'json');

        return [$value];
    }
}
