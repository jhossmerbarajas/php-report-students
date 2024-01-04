# Reportes con Dompdf

<p>
	A menudo, en nuestro proyectos, necesitaremos hacer reportes en nuestros proyectos. Reportes de:
	<ul>
		<li>
			Ventas
			Usuarios 
		</li>
	</ul>
	solo por mencionar algunos
</p>

<p>
	En este caso, crearé un reporte en pdf sobre estudiantes y sus Cursos. Para ello, estoy usando: Sql Server y PHP.
</p>

## Usar Dompdf
<p>
	Para ello, usamos composer:
</p>

```
composer require dompdf/dompdf
```

## Puedes usar este proyecto
<p>
	Este proyecto ya esta configurado y usando esta librería, puedes clonar este repositorio y curosiar un poco.
</p>

### Clonando Repositorio

```
git clone https://github.com/jhossmerbarajas/php-report-students.git
```

## A tener en cuenta
<p>
	Esta librería no soporta muy bien, los estilos en archivos separados. Debes agregar los estilos en cabeza del documento.
</p>
