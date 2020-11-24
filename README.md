## LATAM Rivals

### Pasos para iniciar el repositorio
* Descarga el proyecto con git clone o como zip
* En el directorio del proyecto abre una terminal y escribe npm install
* Una vez terminada la instalación escribe el comando gulp

### Subir cambios al repositorio
1. Primero debes tener un repositorio local, se hace con (solo se usa una vez)
```
git init
```
2. Después agregar los archivos para seguimiendo
```
git add .
```
3. Posteriormente hacer un commit (versión del proyecto)
```
git commit -m "Nombre del commit/version"
```
4. Y ahora tendrás que vincular el proyecto, para esto usa el siguiente comandos (Solo se usa una vez)
```
git remote add origin *link del repositorio*
```
5. Finalmente para poder subir los cambios al repositorio de github se usa:
```
git push -u origin master
```
Eso para subir la primera vez, a partir de ahora solo tendrás que usar los comandos del *2do*, *3er* y *5to* paso