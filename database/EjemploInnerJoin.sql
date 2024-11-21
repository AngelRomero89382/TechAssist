SELECT
    usuarios.id AS usuario_id,
    usuarios.username,
    usuarios.email,
    usuarios.nivel,
    usuarios.fecha_registro,
    usuarios.ultima_sesion,
    usuarios.estado_sesion,
    historial_usuarios.id AS historial_id,
    historial_usuarios.tipo_cambio,
    historial_usuarios.descripcion,
    historial_usuarios.estado_sesion AS historial_estado_sesion,
    historial_usuarios.fecha_cambio,
    historial_usuarios.dispositivo,
    historial_usuarios.navegador
FROM usuarios
INNER JOIN historial_usuarios ON usuarios.id = historial_usuarios.usuario_id
WHERE usuarios.id = ?
ORDER BY historial_usuarios.fecha_cambio DESC;