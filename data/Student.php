<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;

    private string $sample;

    public function setSample(string $sample)
    {
        $this->sample = $sample;
    }

    public function __clone()
    // jika ingin membuat penegecualian clone properties tertentu bisa menggunakan function __clone
    // gambaran nya adalah seperti ini $student1 => clone $student2 => $student2->clone()
    {
        unset($this->sample);
    }

    // magic function diawali underscore "__"
    public function __toString(): string
    {
        return "Student id: $this->id, name: $this->name, value: $this->value";
    }

    public function __invoke(...$arguments): void
    {
        $join = join(", ", $arguments);
        echo "Invoke Student with arguments $join" . PHP_EOL;
    }

    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Rizqi",
            "version" => "1.0.0",
        ];
    }
}

