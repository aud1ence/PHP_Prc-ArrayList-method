<?php


class MyList
{
    public int $size;
    public array $elements;

    public function __construct(int $size)
    {
        $this->size = $size;
        $this->elements = [];
    }

    public function insert($index, $obj): void
    {
        array_splice($this->elements, $index, 0, $obj);
    }

    public function add($obj): void
    {
        array_push($this->elements, $obj);
    }

    public function remove($index): void
    {
        if (array_key_exists($index, $this->elements)) {
            unset($this->elements[$index]);
        }
    }

    public function get($index): object
    {
        if ($index <= $this->size()) {
            return $this->elements[$index];
        } else {
           echo "Khong ton tai chi muc can tim";
        }
    }

    public function clear(): void
    {
        unset($this->elements);
    }

    public function addAll($arr): array
    {
       return array_merge($this->elements, $arr);
    }

    public function indexOf($obj): int
    {
        $arrKeys = array_search($this->elements, $obj);

        if(empty($arrKeys))
        {
            return -1;
        }
        else
        {
            return $arrKeys;
        }
    }

    public function isEmpty(): bool
    {
        return empty($this->elements);
    }

    public function sort(): array|bool
    {
        return sort($this->elements);
    }

    public function reset(): void
    {
        reset($this->elements);
    }

    public function size(): int
    {
        return count($this->elements);
    }
}