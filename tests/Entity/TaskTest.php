<?php

namespace App\Tests\Entity;

use App\Entity\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public function testTaskTitle(): void
    {
        $task = new Task();
        $task->setTitle('My Task title');
        $this->assertSame('My Task title', $task->getTitle());
    }

    public function testTaskTitleCannotBeEmpty(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $task = new Task();
        $task->setTitle('');
    }
}
