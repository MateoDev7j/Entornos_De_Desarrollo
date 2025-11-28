/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package controlador;

import java.util.List;
import javax.swing.table.AbstractTableModel;
import modelo.Tienda;

/**
 *
 * @author violi
 */
public class ModeloTiendas extends AbstractTableModel {

    private List<Tienda> tiendas;

    /**
     * 
     * @param tiendas 
     */
    public ModeloTiendas(List<Tienda> tiendas) {
        this.tiendas = tiendas;
    }
    
    @Override
    public int getRowCount() {
        return this.tiendas.size();
    }

    @Override
    public int getColumnCount() {
        return 7;
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        Tienda t=this.tiendas.get(rowIndex);
        Object devolver;
        switch (columnIndex) {
            case 0:
                devolver=t.getCodigo();
                break;
            case 1:
                devolver=t.getNombre();
                break;
            case 2:
                devolver=t.getLocalidad();
                break;
            case 3:
                devolver=t.getProvincia();
                break;
            case 4:
                devolver=t.getCodPostal();
                break;
            case 5:
                devolver=t.getSuperficie();
                break;
            case 6:
                devolver=t.getStringFechaApertura();
                break;
            default:
                throw new AssertionError();
        }
        return devolver;
    }

    @Override
    public String getColumnName(int column) {
        String devolver;
        switch (column) {
            case 0:
                devolver="Código";
                break;
            case 1:
                devolver="Nombre";
                break;
            case 2:
                devolver="Localidad";
                break;
            case 3:
                devolver="Provincia";
                break;
            case 4:
                devolver="Código Postal";
                break;
            case 5:
                devolver="Superficie";
                break;
            case 6:
                devolver="Fecha Apertura";
                break;
            default:
                throw new AssertionError();
        }
    
        return devolver;
    } 

    public List<Tienda> getTiendas() {
        return tiendas;
    }    
    
    
}
