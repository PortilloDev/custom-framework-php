# Conociendo un framework por dentro

## From Controller

El `from controller` es un patrón de diseño de software que proporciona un solo punto de entrada a una aplicación web.

Este patrón es utilizado por todos los frameworks PHP que puedas imaginar y proporciona muchos beneficios, siendo los principales:

- Control centralizado
- Mantenibilidad del sistema
- Configurabilidad

## Request Class

Todos los marcos PHP utilizan objetos para representar la solicitud entrante. Una de las mayores ventajas de esto es la encapsulación: podemos almacenar todos los valores superglobales como propiedades en nuestro objeto de solicitud y esos valores se conservarán y protegerán contra la manipulación, a diferencia de los valores superglobales a los que se les pueden alterar los valores.

Podremos utilizar algunas de las propiedades de nuestro objeto de solicitud para realizar operaciones importantes, como enrutar la solicitud al controlador (controlador) correcto, etc.

## Http Kernel
Hemos analizado la clase Solicitud y la clase Respuesta, así que ahora consideremos una clase que es responsable de tomar esa Solicitud y devolver una Respuesta.

Para ello vamos a crear una clase de kernel HTTP que es el corazón de su aplicación. Esta clase estará compuesta por los componentes principales que vamos a necesitar para completar el ciclo de solicitud -> respuesta.

## Routes

Una vez que nuestra aplicación recibe la solicitud, debemos reenviarla a un controlador.

Hacemos esto al tener rutas predefinidas que coinciden con los patrones de URI. Si un URI solicitado coincide con el patrón de una ruta, la solicitud se reenvía al controlador correcto para esa ruta.

Un controlador es simplemente una función invocable que tiene un manejo personalizado para solicitudes a URI que coinciden con esa ruta en particular. Puede ser una devolución de llamada, una función o una matriz que contiene un objeto y el nombre de un método en ese objeto.


## Dependency Injection
La inyección de dependencia es un patrón que permite que las dependencias de un objeto (las otras clases de las que depende para funcionar) le pasen desde el exterior.
