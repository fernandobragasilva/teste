<?php
use App\Util\Data;

class DataTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
    }

    /**
     * Método sendo testado: Data@formatarDataRetorno
     */
    public function testFormatarDataRetornoDataFormatada()
    {
        // Arrange
        $datetime = '2016-01-04';
        // Assert
        $this->assertEquals(Data::formatarDataRetorno($datetime), '2016-01-04T00:00:00+0000');
    }

    /**
     * Método sendo testado: Data@formatarDataRetorno
     */
    public function testFormatarDataRetornoDataInvalida()
    {
        // Arrange
        $datetime = '2016-13-04';
        // Assert
        $this->assertEquals(Data::formatarDataRetorno($datetime), '2016-13-04');
    }

    /**
     * Método sendo testado: Data@formatarDataRetorno
     */
    public function testFormatarDataRetornoDataVazia()
    {
        // Arrange
        $datetime = '';
        // Assert
        $this->assertEquals(Data::formatarDataRetorno($datetime), null);
    }

    /**
     * Método sendo testado: Data@formatarDataRetorno
     */
    public function testFormatarDataRetornoDataHoraFormatada()
    {
        // Arrange
        $datetime = '2016-01-04 10:43:07';
        // Assert
        $this->assertEquals(Data::formatarDataRetorno($datetime), '2016-01-04T10:43:07+0000');
    }
}
