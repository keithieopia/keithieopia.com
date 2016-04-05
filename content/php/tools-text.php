<?php

    if (isset($_POST['submit'])) {
        switch (strtolower($_POST['submit'])) {
            case 'md5':
                $output = md5($_POST['input']);
                break;

            case 'sha-1':
                $output = sha1($_POST['input']);
                break;

            case 'sha-256':
                $output = hash('sha256', $_POST['input']);
                break;

            case 'sha-512':
                $output = hash('sha512', $_POST['input']);
                break;

            case 'crc-32':
                $output = sprintf("%u\n", crc32($_POST['input']));
                break;

            case 'ripemd-160':
                $output = hash('ripemd160', $_POST['input']);
                break;

            case 'whirlpool':
                $output = hash('whirlpool', $_POST['input']);
                break;

            case 'lowercase':
                $output = strtolower($_POST['input']);
                break;

            case 'uppercase':
                $output = strtoupper($_POST['input']);
                break;

            case 'number lines':
                $lines = explode("\n", $_POST['input']);

                $num = count($lines);
                $pad = strlen($num);

                $output = '';
                for ($i = 0; $i < $num; $i++) {
                    $output .= str_pad($i + 1, $pad, '0', STR_PAD_LEFT) .'. '. $lines[$i] . "\n";
                }
                break;

            case 'add slashes':
                $output = addslashes($_POST['input']);
                break;

            case 'strip slashes':
                $output = stripslashes($_POST['input']);
                break;

            case 'nl2br':
                $output = nl2br($_POST['input'], false);
                break;

            case 'unpad':
                $lines = explode("\n", trim($_POST['input']));
                $lines = array_map('trim', $lines);
                $output = implode("\n", $lines);
                break;

            case 'url encode':
                $output = rawurlencode($_POST['input']);
                break;

            case 'url decode':
                $output = rawurldecode($_POST['input']);
                break;

            case 'rot13':
                $output = str_rot13($_POST['input']);
                break;

            case 'strip html':
                $output = strip_tags($_POST['input']);
                break;

            case 'entities +':
                $output = str_replace('&', '&amp;', htmlentities($_POST['input'], ENT_QUOTES | ENT_HTML5, 'UTF-8'));
                break;

            case 'entities -':
                $output = html_entity_decode(str_replace('&amp;', '&', $_POST['input']), ENT_QUOTES | ENT_HTML5, 'UTF-8');
                break;

            case 'hex +':
                $hex = unpack('H*', $_POST['input']);
                $output = $hex[1];
                break;

            case 'hex -':
                $output = pack('H*', $_POST['input']);
                break;

            case 'binary +':
                $hex = unpack('H*', $_POST['input']);
                $output = base_convert($hex[1], 16, 2);
                break;

            case 'binary -':
                $output = pack('H*', base_convert($_POST['input'], 2, 16));
                break;

            case 'base64 +':
                $output = base64_encode($_POST['input']);
                break;

            case 'base64 -':
                $output = base64_decode($_POST['input']);
                break;

            case 'a-z':
                $words = explode("\n", $_POST['input']);
                sort($words);
                $output = implode("\n", $words);
                break;

            case 'z-a':
                $words = explode("\n", $_POST['input']);
                rsort($words);
                $output = implode("\n", $words);
                break;

            default:
                $output = $_POST['input'];
        }
    }
?>

<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
    <p style="text-align: center">
        <textarea name="input" rows="5" cols="80" placeholder="Text to transform" style="width: 100%"><?php if (isset($output)) echo $output; ?></textarea>
    </p>
    <table style="margin: 0 auto">
        <tr>
            <td><strong>General:</strong></td>
            <td>
                <input type="submit" name="submit" value="Number Lines">
            </td><td>
                <input type="submit" name="submit" value="Unpad">
            </td><td>
                <input type="submit" name="submit" value="ROT13">
            </td><td>
                <input type="submit" name="submit" value="Lowercase"><br>
                <input type="submit" name="submit" value="Uppercase">
            </td><td>
                <input type="submit" name="submit" value="A-Z"><br>
                <input type="submit" name="submit" value="Z-A">
            </td>
        </tr><tr>
            <td><strong>HTML:</strong></td>
            <td>
                <input type="submit" name="submit" value="NL2BR">
            </td><td>
                <input type="submit" name="submit" value="Strip HTML">
            </td><td>
                <input type="submit" name="submit" value="Entities +"><br>
                <input type="submit" name="submit" value="Entities -">
            </td><td>
                <input type="submit" name="submit" value="Add Slashes"><br>
                <input type="submit" name="submit" value="Strip Slashes">
            </td><td>
                <input type="submit" name="submit" value="URL Encode"><br>
                <input type="submit" name="submit" value="URL Decode">
            </td>
        </tr><tr>
            <td><strong>Encode:</strong></td>
            <td>
                <input type="submit" name="submit" value="Binary +"><br>
                <input type="submit" name="submit" value="Binary -">
            </td><td>
                <input type="submit" name="submit" value="Hex +"><br>
                <input type="submit" name="submit" value="Hex -">
            </td><td>
                <input type="submit" name="submit" value="Base64 +"><br>
                <input type="submit" name="submit" value="Base64 -">
            </td>
        </tr><tr>
            <td><strong>Hash:</strong></td>
            <td>
                <input type="submit" name="submit" value="CRC-32">
            </td><td>
                <input type="submit" name="submit" value="RIPEMD-160">
            </td><td>
                <input type="submit" name="submit" value="MD5"><br>
                <input type="submit" name="submit" value="SHA-1">
            </td><td>
                <input type="submit" name="submit" value="SHA-256"><br>
                <input type="submit" name="submit" value="SHA-512">
            </td><td>
                <input type="submit" name="submit" value="WHIRLPOOL">
            </td>
        </tr>
    </table>
</form>
