Lista enlazada en php.
Este código crea una lista enlazada, que es como una cadena de datos donde cada eslabón (nodo) guarda un valor y apunta al siguiente.

Parte 1: El Nodo
Cada nodo tiene dos partes:
Dato: El valor que guarda (ej. un número, texto, etc.).
Siguiente: La dirección del próximo nodo (o "nada" si es el último).

Parte 2: La Lista
La lista tiene un inicio (llamado "Cabeza") que apunta al primer nodo.
Al principio, la lista está vacía (Cabeza = nada).

Operaciones
Insertar un dato:
Se crea un nodo con el dato.
El nuevo nodo apunta al nodo que estaba al inicio.
Ahora, el inicio (Cabeza) pasa a ser el nuevo nodo.

Resultado: El dato se agrega al principio de la lista.
Mostrar la lista:
Se recorre desde el inicio (Cabeza).
Para cada nodo, se imprime su dato.
Se avanza al siguiente nodo hasta llegar al final.
Resultado: Se ven todos los datos en orden (del primero al último).
