<!DOCTYPE html>
<html lang="pten">
<head>
    <?php
        require_once 'includes/head.php';
    ?>
</head>
<body>
    
    <div class="container">
        <div id="calculadora" class="col md 12">
            <h3>
                Calculadora Trainee
            </h3>
            <div class="input-field col s6">
                <input placeholder="" id="lcd" type="text" class="validate" disabled>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td id="clear" colspan="2"><button class="btn btn-default blue-grey darken-3">C</button></td>
                        <td id="backspace" colspan="2"><button class="btn btn-default"><i class="material-icons">backspace</i></button></td>
                    </tr>
                    <tr>
                        <td id="seven" ><button class="btn btn-default">7</button></td>
                        <td id="eight" ><button class="btn btn-default">8</button></td>
                        <td id="nine" ><button class="btn btn-default">9</button></td>
                        <td id="div" ><button class="btn btn-default">/</button></td>
                    </tr>
                    <tr>
                        <td id="four" ><button class="btn btn-default">4</button></td>
                        <td id="five" ><button class="btn btn-default">5</button></td>
                        <td id="six" ><button class="btn btn-default">6</button></td>
                        <td id="mult" ><button class="btn btn-default">*</button></td>
                    </tr>
                    <tr>
                        <td id="one" ><button class="btn btn-default" onclick="alert('Iae')">1</button></td>
                        <td id="two" ><button class="btn btn-default">2</button></td>
                        <td id="three" ><button class="btn btn-default">3</button></td>
                        <td id="sub" ><button class="btn btn-default">-</button></td>
                    </tr>
                    <tr>
                        <td id="zero" colspan="2"><button class="btn btn-default">0</button></td>
                        <td id="dot" ><button class="btn btn-default">.</button></td>
                        <td id="add" ><button class="btn btn-default">+</button></td>
                    </tr>
                    <tr>
                        <td id="equals" colspan="4" ><button class="btn btn-default">=</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        console.log(
                 getElementsByTagName('td')
            );
    </script>
    <script type="text/javascript" src="js/calculadora.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <?php
        require_once 'includes/footer.php';
    ?>
</body>
</html>