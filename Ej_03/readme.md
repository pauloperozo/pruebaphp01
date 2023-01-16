# Planteamiento Ejercicio 💭 

⁉️ Crear una función que toma como parámetro un string de hora y minutos “hh:mm”, y luego devuelve el ángulo menor entre la mano de la hora y la mano del minuto. El formato de la hora y minutos debe ser con dos dígitos, “01:45”“10:30”, “02:25”, “00:00”, “12:30”, “12:05”, “12:12”, “12:27”. Y se puede asumir que la mano de la hora siempre estará justo en una hora sin importar cuantos minutos han pasado. También, si el parámetro de la función no fue puesto correctamente o si la hora y minuto no es numérico, la función debe tirar un error

**Ejemplos:** 💻
Las siguientes horas y minutos deben de regresar los siguientes valores de ángulos menores:
“01:45” = 120 💡 “10:30” = 120 💡 “02:25” = 90 💡 “00:00” = 0   💡
“12:30” = 180 💡 “12:05” = 30  💡 “12:12” = 72 💡 “12:27” = 162 💡