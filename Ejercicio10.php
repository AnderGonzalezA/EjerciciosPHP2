<?php
	class Persona{
		private $dni = "";
		private $nombre = "";
		private $apellido = "";

		__construct($dni,$nombre,$apellido){
			setDni($dni);
			setNombre($nombre);
			setApellido($apellido);
		}

		public getDni(){
			return this.$dni;
		}
		public getNombre(){
			return this.$nombre;
		}
		public getApellido(){
			return this.$apellido;
		}
		public setDni($nuevoDni){
			this.$dni = $nuevoDni;
		}
		public setNombre($nuevoNombre){
			this.$nombre = $nuevoNombre;
		}
		public setApellido($nuevoApellido){
			this.$apellido = $nuevoApellido;
		}

		public recogerNombreCompleto(){
			return("Nombre: " . this.$nombre . " " . this.$apellido);
		}
	}
	class User extends Persona{
		private $puntos = 0;

		public getPuntos(){
			return this.$puntos;
		}
		public setPuntos($nuevoPuntos){
			this.$puntos = $nuevoPuntos;
		}

		public recogerNombreCompleto(){
			return("User: " . this.$nombre . " " . this.$apellido);
		}

		public comprobarPuntos(){
			if (this.$puntos < 100){
				echo("Tiene menos de 100 puntos.");
			}else{
				echo("Tiene 100 puntos o mas");
			}
		}
	}
?>