/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package controlador;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Date;
import java.util.EnumMap;
import java.util.HashMap;
import java.util.Iterator;
import java.util.Map;
import modelo.*;

/**
 *
 * @author violi
 */
public class Controlador {
    private Gestor logeado;
    private ArrayList<Tienda> listaTiendas;
    private ArrayList<Gestor> listaUsuarios;
    private SimpleDateFormat formatoFechas;

    public Controlador() {
        this.listaTiendas=new ArrayList<>();
        this.listaUsuarios=new ArrayList<>();
        this.listaUsuarios.add(new Gestor("elena","patata"));
        this.listaUsuarios.add(new Gestor("superjefe","theboss"));
        try{
            formatoFechas = new SimpleDateFormat("dd/MM/yyyy hh:mm");
            this.listaTiendas.add(new Tienda("1", "SuperTienda", "Granada", "Granada", "18015", 134.8,formatoFechas.parse("24/03/2001 00:00")));
            this.listaTiendas.add(new Tienda("2", "TuTiendaCercana", "Albox", "Almería", "04013", 123.0, formatoFechas.parse("07/12/2013 00:00")));
            this.listaTiendas.add(new Tienda("3", "Patatas al ajo", "Granada", "Granada", "18015", 134.8,formatoFechas.parse("24/03/2001 00:00")));
            this.listaTiendas.add(new Tienda("4", "El super", "Almería", "Almería", "04013", 123.0, formatoFechas.parse("07/12/2013 00:00")));
            this.listaTiendas.add(new Tienda("5", "Tiendaca", "Almería", "Almería", "18015", 134.8,formatoFechas.parse("24/03/2001 00:00")));
            this.listaTiendas.add(new Tienda("6", "TuTiendaCercana", "Córdoba", "Córdoba", "04013", 123.0, formatoFechas.parse("07/12/2013 00:00")));
            this.listaTiendas.add(new Tienda("7", "Super Tienda II", "Granada", "Granada", "18015", 134.8,formatoFechas.parse("24/03/2001 00:00")));
            this.listaTiendas.add(new Tienda("8", "TuTiendaCercana", "Priego de Córdoba", "Córdoba", "04013", 123.0, formatoFechas.parse("07/12/2013 00:00")));
            this.listaTiendas.add(new Tienda("9", "SuperTienda", "Granada", "Granada", "18015", 134.8,formatoFechas.parse("24/03/2001 00:00")));
            this.listaTiendas.add(new Tienda("10", "TuTiendaCercana", "Albox", "Almería", "04013", 123.0, formatoFechas.parse("07/12/2013 00:00")));
            this.listaTiendas.add(new Tienda("11", "SuperTienda", "Granada", "Granada", "18015", 134.8,formatoFechas.parse("24/03/2001 00:00")));
            this.listaTiendas.add(new Tienda("12", "TuTiendaCercana", "Albox", "Almería", "04013", 123.0, formatoFechas.parse("07/12/2013 00:00")));
            this.listaTiendas.add(new Tienda("13", "SuperTienda", "Granada", "Granada", "18015", 134.8,formatoFechas.parse("24/03/2001 00:00")));
            this.listaTiendas.add(new Tienda("14", "TuTiendaCercana", "Albox", "Almería", "04013", 123.0, formatoFechas.parse("07/12/2013 00:00")));
            this.listaTiendas.add(new Tienda("15", "SuperTienda", "Granada", "Granada", "18015", 134.8,formatoFechas.parse("24/03/2001 00:00")));
            this.listaTiendas.add(new Tienda("16", "TuTiendaCercana", "Albox", "Almería", "04013", 123.0, formatoFechas.parse("07/12/2013 00:00")));
        }catch(ParseException pe){
            ;
        }
    }

    public Gestor getLogeado() {
        return logeado;
    }

    public void setLogeado(Gestor logeado) {
        this.logeado = logeado;
    }
    
    public String getUsuarioLogeado(){
        return this.logeado.getUsuario();
    }

    public ArrayList<Tienda> getListaTiendas() {
        return listaTiendas;
    }

    public void setListaTiendas(ArrayList<Tienda> listaTiendas) {
        this.listaTiendas = listaTiendas;
    }

    public SimpleDateFormat getFormatoFechas() {
        return formatoFechas;
    }

    public void setFormatoFechas(SimpleDateFormat formatoFechas) {
        this.formatoFechas = formatoFechas;
    }
    
    
    
    public boolean testUsuario(String nomUsu, String passUsu){
        Gestor usuario;
        Iterator it=listaUsuarios.iterator();
        boolean pasaTest=false;
        while(it.hasNext()&&!pasaTest) {
            usuario=(Gestor)it.next();
            if(nomUsu.equals(usuario.getUsuario())&&passUsu.equals(usuario.getPass())){
                pasaTest=true;
                this.logeado=usuario;
            }
        }
        return pasaTest;
    }
    
    public void cierraSesion(){
        this.logeado=null;
    }
    
    public void addTienda(String nombre, String localidad, String provincia, String codPostal, double superficie, Date fechaApertura){
        String codTienda;
        //Tomamos la última tienda para obtener su código
        if(this.listaTiendas.isEmpty()){
            codTienda="1";
        }
        else{
            codTienda=String.valueOf(Integer.parseInt(this.listaTiendas.get(this.listaTiendas.size()-1).getCodigo())+1);
        }
        listaTiendas.add(new Tienda(codTienda, nombre, localidad, provincia, codPostal, superficie, fechaApertura));
    }
    
    public void editTienda(int tiendaSeleccionada, String nombre, String localidad, String provincia, String codPostal, double superficie){
        Tienda t=this.listaTiendas.get(tiendaSeleccionada);
        t.setNombre(nombre);
        t.setLocalidad(localidad);
        t.setProvincia(provincia);
        t.setCodPostal(codPostal);
        t.setSuperficie(superficie);
    }
    
    public void deleteTienda(int lugar){
        this.listaTiendas.remove(lugar);
    }
    
}
