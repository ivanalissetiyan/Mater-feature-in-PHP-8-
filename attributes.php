<?php

// #[Attribute]
class cart
{
}

class Checkout
{
    // #Not Empty
    public ?string $item;
}

// use reflaction
function validate(object $object)
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        validateNotEmpty($property, $object);
    }
}

// For get property
function validateNotEmpty(ReflectionProperty $property, object $object)
{
    $attributes = $property->getAttributes(notEmpty::class);
    if (count($attributes) > 0) {
        if (!$property > isInitialized($object))
            throw new Exception("Property $property->name is null");
        if ($property->getValue($object) == null)
            throw new Exception("Property $property->name is null");
    }
}

$request = new Checkout();
$request->item = "1";
validate($request);
