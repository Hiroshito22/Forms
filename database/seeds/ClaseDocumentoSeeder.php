<?php

// namespace Database\Seeders;

use App\Models\ClaseDocumento;
use Illuminate\Database\Seeder;

class ClaseDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES DECANALES",
            "nomenclatura"=>"RD",
            "tipo_transparencia_id"=>1,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES DE CONSEJO DE FACULTAD",
            "nomenclatura"=>"CF",
            "tipo_transparencia_id"=>1,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"ACTAS DE CONSEJO DE FACULTAD",
            "nomenclatura"=>"ACF",
            "tipo_transparencia_id"=>1,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"ACTAS DE CONSEJO UNIVERSITARIO",
            "nomenclatura"=>"ACU",
            "tipo_transparencia_id"=>2,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES RECTORALES",
            "nomenclatura"=>"RR",
            "tipo_transparencia_id"=>2,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES DE CONSEJO UNIVERSITARIO",
            "nomenclatura"=>"CU",
            "tipo_transparencia_id"=>2,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"ACTAS DE ASAMBLEA UNIVERSITARIA",
            "nomenclatura"=>"AAU",
            "tipo_transparencia_id"=>2,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES DIRECTORALES",
            "nomenclatura"=>"D",
            "tipo_transparencia_id"=>2,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES  DE ASAMBLEA UNIVERSITARIA",
            "nomenclatura"=>"AU",
            "tipo_transparencia_id"=>2,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"TARIFAS DE SERVICIOS",
            "nomenclatura"=>"TS",
            "tipo_transparencia_id"=>2,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES DE GRADOS",
            "nomenclatura"=>"G",
            "tipo_transparencia_id"=>3,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES Y DICTAMENES DEL TRIBUNAL DE HONOR",
            "nomenclatura"=>"DTH",
            "tipo_transparencia_id"=>4,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"INFORME ANUAL",
            "nomenclatura"=>"IA",
            "tipo_transparencia_id"=>5,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES DEL COMITÉ ELECTORAL UNIVERSITARIO",
            "nomenclatura"=>"CEU",
            "tipo_transparencia_id"=>6,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES DEL CONSEJO DE ESCUELA DE POSGRADO",
            "nomenclatura"=>"CEP",
            "tipo_transparencia_id"=>7,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"ACTAS DE ESCUELA DE POSGRADO",
            "nomenclatura"=>"AEP",
            "tipo_transparencia_id"=>7,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES VICERRECTORALES(VRI)",
            "nomenclatura"=>"VRI",
            "tipo_transparencia_id"=>8,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES DEL CONSEJO DE INVESTIGACIÓN(VRI)",
            "nomenclatura"=>"VCI",
            "tipo_transparencia_id"=>8,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"ACTAS DE CONSEJO DE INVESTIGACIÓN(VRI)",
            "nomenclatura"=>"ACI",
            "tipo_transparencia_id"=>8,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"PROYECTOS DE INVESTIGACIÓN",
            "nomenclatura"=>"PI",
            "tipo_transparencia_id"=>8,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES VICERRECTORALES(VRA)",
            "nomenclatura"=>"VRA",
            "tipo_transparencia_id"=>9,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"EXPEDIENTES DEFENSORIA UNIVERSITARIA",
            "nomenclatura"=>"EDU",
            "tipo_transparencia_id"=>10,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"EF-1 ESTADO DE SITUACIÓN FINANCIERA",
            "nomenclatura"=>"EF-1",
            "tipo_transparencia_id"=>11,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"EF-2 ESTADO DE GESTIÓN",
            "nomenclatura"=>"EF-2",
            "tipo_transparencia_id"=>11,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"EF-3 ESTADO DE CAMBIO EN EL PATRIMONIO NETO",
            "nomenclatura"=>"EF-3",
            "tipo_transparencia_id"=>11,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"EF-4 ESTADO DE FLUJO EFECTIVO",
            "nomenclatura"=>"EF-4",
            "tipo_transparencia_id"=>11,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"EP-1 ESTADO DE EJECUCIÓN DEL PRESUPUESTO DE INGRESOS Y GASTOS",
            "nomenclatura"=>"EP-1",
            "tipo_transparencia_id"=>11,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"PP-1 PRESUPUESTO INSTITUCIONAL DE INGRESOS",
            "nomenclatura"=>"PP-1",
            "tipo_transparencia_id"=>11,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"PP-2 PRESUPUESTO INSTITUCIONAL DE GASTOS",
            "nomenclatura"=>"PP-2",
            "tipo_transparencia_id"=>11,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"SALDO DE BALANCE",
            "nomenclatura"=>"SB",
            "tipo_transparencia_id"=>11,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"PROYECTOS Y ACTIVIDADES",
            "nomenclatura"=>"PA",
            "tipo_transparencia_id"=>12,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"REPORTE DE SEGUIMIENTO DEL PLAN OPERATIVO INSTITUCIONAL (AÑO)",
            "nomenclatura"=>"RPOI",
            "tipo_transparencia_id"=>13,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"PLAN OPERATIVO INSTITUCIONAL (AÑO)",
            "nomenclatura"=>"POI",
            "tipo_transparencia_id"=>13,
        ]);

        ClaseDocumento::firstOrcreate([
            "nombre"=>"PLAN OPERATIVO INSTITUCIONAL MULTIANUAL(AÑO  - AÑO)",
            "nomenclatura"=>"POIM",
            "tipo_transparencia_id"=>13,
        ]);
        ClaseDocumento::firstOrcreate([
            "nombre"=>"MODELOS DE CONTRATO",
            "nomenclatura"=>"MC",
            "tipo_transparencia_id"=>13,
        ]);
        ClaseDocumento::firstOrcreate([
            "nombre"=>"DECLARACIONES JURADAS",
            "nomenclatura"=>"DJ",
            "tipo_transparencia_id"=>13,
        ]);
        ClaseDocumento::firstOrcreate([
            "nombre"=>"RESOLUCIONES JEFATURALES",
            "nomenclatura"=>"J",
            "tipo_transparencia_id"=>13,
        ]);
        ClaseDocumento::firstOrcreate([
            "nombre"=>"BECA DE ALIMENTOS",
            "nomenclatura"=>"BA",
            "tipo_transparencia_id"=>13,
        ]);
        ClaseDocumento::firstOrcreate([
            "nombre"=>"BECA PRONABEC",
            "nomenclatura"=>"BP",
            "tipo_transparencia_id"=>13,
        ]);
        ClaseDocumento::firstOrcreate([
            "nombre"=>"ORDEN DE SERVICIO",
            "nomenclatura"=>"OS",
            "tipo_transparencia_id"=>13,
        ]);
        ClaseDocumento::firstOrcreate([
            "nombre"=>"PENALIDADES",
            "nomenclatura"=>"P",
            "tipo_transparencia_id"=>13,
        ]);
        ClaseDocumento::firstOrcreate([
            "nombre"=>"COMITE DE SELECCION",
            "nomenclatura"=>"CS",
            "tipo_transparencia_id"=>13,
        ]);
        ClaseDocumento::firstOrcreate([
            "nombre"=>"PLAN ANUAL DE CONTRATOS",
            "nomenclatura"=>"PAC",
            "tipo_transparencia_id"=>13,
        ]);
        ClaseDocumento::firstOrcreate([
            "nombre"=>"PROCESO DE SELECCION",
            "nomenclatura"=>"PS",
            "tipo_transparencia_id"=>13,
        ]);
    }
}
