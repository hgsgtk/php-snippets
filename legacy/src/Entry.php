<?php declare(strict_types=1);


namespace legacy;

/**
 * Class Entry
 * @package legacy
 */
final class Entry
{
    /** @var \DateTimeInterface $postDate */
    private $postDate;

    /**
     * @param \DateTimeInterface|null $date
     * @throws \Exception
     */
    public function postDate(\DateTimeInterface $date = null)
    {
        $postDate = $date ?? new \DateTimeImmutable();
        $this->postDate = $postDate;
    }
}
