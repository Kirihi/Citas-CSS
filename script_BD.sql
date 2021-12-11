create database Citas_CSS
drop database Citas_CSS

create table Pacientes (idPaciente varchar(20) not null constraint PK_Pacientes_idPaciente primary key, passPaciente varchar(16) not null, nombre varchar(20) not null, telefono_paciente varchar(10) not null, poliza_seg varchar(15) not null, correoPaciente varchar(30) not null, fechaNacto date not null)
create table Citas (idCita int not null identity(1,1), policlinica varchar(50) not null, especialidad varchar(30) not null, fechaCita date not null, horaCita time not null, idPaciente varchar(20) not null constraint Fk_Citas_idPaciente foreign key references Pacientes(idPaciente))
create table Medico (idMedico varchar(20) not null constraint PK_Medico_idMedico primary key, passMedico varchar(16) not null, nombreMedico varchar(20) not null, telefonoMedico varchar(10) not null, Cargo varchar(10) not null, correoMedico varchar(30) not null)
create table [Admin] (userAdmin varchar(10) not null, passAdmin varchar(16) not null, nombreAdmin varchar(30) not null)

select * from Pacientes
select * from Citas
select * from Medico
select * from [Admin]

insert into [Admin] values ('admin', 'password', 'Raul')