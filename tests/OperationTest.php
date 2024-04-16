<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Operation;

final class OperationTest extends TestCase
{

    private $operation;

    public function setUp(): void
    {
        $this->operation = new Operation();
    }

    public static function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3],
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testSumWithTwoValues(int $num1, int $num2, int $expected): void
    {
        $this->assertSame($expected, $this->operation->sum($num1, $num2));
    }

    public function testSumWithNullValues(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->operation->sum(NULL, NULL);
    }

    public function testSumWithNotNumericValues(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->operation->sum('aaa', 'bbb');
    }
}