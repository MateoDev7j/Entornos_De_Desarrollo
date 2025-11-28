/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package modelo;

import java.text.SimpleDateFormat;
import java.util.Date;

/**
 *
 * @author violi
 */
public class Tienda {
    private String codigo;
    private String nombre;
    private String localidad;
    private String provincia;
    private String codPostal;
    private double superficie;
    private Date fechaApertura;

    public Tienda(String codigo, String nombre, String localidad, String provincia, String codPostal, double superficie, Date fechaApertura) {
        this.codigo = codigo;
        this.nombre = nombre;
        this.localidad = localidad;
        this.provincia = provincia;
        this.codPostal = codPostal;
        this.superficie = superficie;
        this.fechaApertura = fechaApertura;
    }

    public String getCodigo() {
        return codigo;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getLocalidad() {
        return localidad;
    }

    public void setLocalidad(String localidad) {
        this.localidad = localidad;
    }

    public String getProvincia() {
        return provincia;
    }

    public void setProvincia(String provincia) {
        this.provincia = provincia;
    }

    public String getCodPostal() {
        return codPostal;
    }

    public void setCodPostal(String codPostal) {
        this.codPostal = codPostal;
    }

    public double getSuperficie() {
        return superficie;
    }

    public void setSuperficie(double superficie) {
        this.superficie = superficie;
    }

    public Date getFechaApertura() {
        return fechaApertura;
    }

    public void setFechaApertura(Date fechaApertura) {
        this.fechaApertura = fechaApertura;
    }
    
    public String getStringFechaApertura(){
        SimpleDateFormat formato = new SimpleDateFormat("dd/MM/yyyy hh:mm");
        return formato.format(this.fechaApertura);
    }
    
    public String[] toArrayString(){
        String [] arr=new String[7];
        arr[0]=this.codigo;
        arr[1]=this.nombre;
        arr[2]=this.localidad;
        arr[3]=this.provincia;
        arr[4]=this.codPostal;
        arr[5]=String.valueOf(this.superficie);
        arr[6]=this.getStringFechaApertura();
        return arr;
    }
    
}
