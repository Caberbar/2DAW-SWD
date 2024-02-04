<?php
// Inicia o reanuda la sesión
session_start();

// Verifica si la solicitud es a través del método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['extras'])) {
        // Obtiene los extras del formulario
        $extrasFromForm = $_POST['extras'];
    
        // Verifica si $extrasFromForm es un array y no está vacío
        if (is_array($extrasFromForm) && !empty($extrasFromForm)) {
            // Asigna los extras obtenidos del formulario
            $extras = $extrasFromForm;
        } else {
            // Si $extrasFromForm no es un array o está vacío, asigna un array vacío
            $extras = array();
        }
    } else {
        // Si la clave 'extras' no está presente en $_POST, asigna un array vacío
        $extras = array();
    }
    
    // Añade un nuevo pedido a $_SESSION['pedido'] con detalles detallados sobre los extras
    $_SESSION['pedido'][] = array(
        'mesa' => $_POST['mesa'],
        'camarero' => $_POST['camarero'],
        'primer_plato' => $_POST['primer_plato'],
        'segundo_plato' => $_POST['segundo_plato'],
        'bebida' => $_POST['bebida'],
        'extras' => $extras
    );

    // Redirigir a la página de menú
    header('Location: menu.php');
    exit();
}
?>


