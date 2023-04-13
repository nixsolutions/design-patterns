<?php

namespace DesignPatterns\Tests\Structural\Composite;


use DesignPatterns\Structural\Composite\Html\Body;
use DesignPatterns\Structural\Composite\Html\Div;
use DesignPatterns\Structural\Composite\Html\H4;
use DesignPatterns\Structural\Composite\Html\Header;
use DesignPatterns\Structural\Composite\Html\Html;
use DesignPatterns\Structural\Composite\Html\Paragraph;
use DesignPatterns\Structural\Composite\Html\Title;
use PHPUnit_Framework_TestCase;

class CompositeTest extends PHPUnit_Framework_TestCase
{
    public function testRender()
    {
        $result = '<html>' . PHP_EOL
            . '<header>' . PHP_EOL
            . '<title>Custom Page</title>' . PHP_EOL
            . '</header>' . PHP_EOL
            . '<body>' . PHP_EOL
            . '<div>' . PHP_EOL
            . '<h4>Custom header</h4>' . PHP_EOL
            . '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Vivamus convallis velit massa, faucibus egestas mauris vestibulum id. Vivamus ut justo.</p>' . PHP_EOL
            . '</div>' . PHP_EOL
            . '</body>' . PHP_EOL
            . '</html>' . PHP_EOL;


        $htmlDocument = new Html();

        $header = new Header();
        $title = new Title('Custom Page');
        $header->addElement($title);
        $htmlDocument->addElement($header);

        $body = new Body();
        $div = new Div();
        $h4 = new H4('Custom header');
        $paragraph = new Paragraph(
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Vivamus convallis velit massa, faucibus egestas mauris vestibulum id. Vivamus ut justo.'
        );
        $div->addElement($h4);
        $div->addElement($paragraph);
        $body->addElement($div);
        $htmlDocument->addElement($body);

        $this->assertEquals($result, $htmlDocument->render());
    }
}
