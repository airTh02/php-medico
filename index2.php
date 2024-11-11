    <form action="index2.php" method="GET">

		<input type="text" name="letra" maxlength="1">
		<button type="submit">Enviar</button>

	</form>

    <?php

        $letra = $_GET["letra"];

        switch ($letra) {
            case 'a':
            case 'A':
                print "VOGAL!";
                break;
                case 'e':
                    print "VOGAL!";
                    break;
                    case 'i':
                        print "VOGAL!";
                        break;
                        case 'o':
                            print "VOGAL!";
                            break;
                            case 'u':
                                print "VOGAL!";
                                break;
            
            default:
                print "CONSOANTE!";
        }

    ?>
    <hr>

    <form action="index2.php" method="GET">

        <input type="number" name="idade">
        <button type="submit">Enviar</button>

    </form>

    <?php

    $idade = $_GET["idade"];






		