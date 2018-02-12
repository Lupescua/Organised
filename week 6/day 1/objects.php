<?php
class computer{
    public $model = null;
    public $operating_system = null;
    public $is_portable = false;
    public $status = 'on';

        function switchOff() {
            $this->status = 'off';
        }

        function toggleSwitch(){
            $this->status = ( $this->status=='off' ? 'on':'off');
        }
    }

    $my_computer  = new computer();
        $my_computer->model = 'Acer';
        $my_computer->operating_system='Win';
        $my_computer->is_portable =true;
        $my_computer->status='on';

echo ($my_computer->switchOff());
echo  ($my_computer->toggleSwitch())

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>

    <body>
        <!-- <button onclick(<?= $my_computer->toggleSwitch()?> )> Switch off</button> -->

        <h1>My computer</h1>
        <table>
            <tr>
                <th>Model:</th>
                <td>
                    <?= $my_computer->model ; ?>
                </td>
            </tr>
            <tr>
                <th>OS:</th>
                <td>
                    <?= $my_computer->operating_system; ?>
                </td>
            </tr>
            <tr>
                <th>Portable:</th>
                <td>
                    <?= $my_computer->is_portable ? 'yes':'no'; ?>
                </td>
            </tr>
            <tr>
                <th>Status:</th>
                <td>switched
                    <?= $my_computer->status == 'on' ? 'on':'off'; ?>
                </td>
            </tr>
        </table>

    </body>

    </html>