<?php 

class Animal {
    public function makeSound() {
        echo "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow";
    }
}

function speak(Animal $animal) {
    $animal->makeSound();
}

speak(new Dog()); // Output: Bark
speak(new Cat()); // Output: Meow

