<?php
trait TimestampableEntity
{
    public $createdAt;

    public $updatedAt;

    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt  =  $createdAt;

        return $this;
    }

    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

?>