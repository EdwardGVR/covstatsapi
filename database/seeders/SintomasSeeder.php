<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sintomas as S;

class SintomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sintomas = [
            [
                "sintoma" => "Fiebre",
                "descripcion" => "Temperatura un poco elevada por cortos periodos de tiempo.",
                "gravedad_id" => 1
            ],
            [
                "sintoma" => "Tos seca",
                "descripcion" => "Toser sin expulsar mucosidad, sensación de irritación, cosquilleo y sequedad en la gargante
                                , pecho despejado, sin congestión.",
                "gravedad_id" => 1
            ],
            [
                "sintoma" => "Pérdida de olfato",
                "descripcion" => "Incapacidad total o parcial de percibir olores del ambiente.",
                "gravedad_id" => 1
            ],
            [
                "sintoma" => "Pérdida de gusto",
                "descripcion" => "Incapacidad total o parcial de percibir sabores al consumir productos alimenticios.",
                "gravedad_id" => 1
            ],
            [
                "sintoma" => "Irritabilidad",
                "descripcion" => "Sensación de agitación ante estímulos externos.",
                "gravedad_id" => 1
            ],
            [
                "sintoma" => "Trastornos del sueño",
                "descripcion" => "Irregularidades en el ciclo de sueño habitual.",
                "gravedad_id" => 1
            ],
            [
                "sintoma" => "Congestión nasal",
                "descripcion" => "Se produce cuando los tejidos nasales acumulan exceso de líquidos,
                                puede o no estar acompañada por una secreción nasal.",
                "gravedad_id" => 1
            ],
            [
                "sintoma" => "Cansancio leve",
                "descripcion" => "Percepción de agotamiento leve al realizar actividades cotidianas.",
                "gravedad_id" => 2
            ],
            [
                "sintoma" => "Conjuntivitis (Enrojecimiento ocular)",
                "descripcion" => "Irritación de la membrana entre el párpado y el globo ocular, se caracteriza por el
                                enrojecimiento, sensación arenosa y picazón en el ojo.",
                "gravedad_id" => 2
            ],
            [
                "sintoma" => "Dolor de garganta",
                "descripcion" => "Percepción de dolor al tragar alimentos, hablar o respirar.",
                "gravedad_id" => 2
            ],
            [
                "sintoma" => "Dolor de cabeza",
                "descripcion" => "Puede estar acompañado por dolor o tensión en el cuello.",
                "gravedad_id" => 2
            ],
            [
                "sintoma" => "Dolores musculares o articulares",
                "descripcion" => "Sensación de dolor en músculo y / o articulaciones.",
                "gravedad_id" => 2
            ],
            [
                "sintoma" => "Erupciones cutáneas",
                "descripcion" => "Es posible la aparición de erupciones o irritaciones en la piel.",
                "gravedad_id" => 2
            ],
            [
                "sintoma" => "Nauseas y vómitos",
                "descripcion" => "Sensación de mareo y nausea acompañada por vómitos.",
                "gravedad_id" => 2
            ],
            [
                "sintoma" => "Diarrea",
                "descripcion" => "Puede estar acompañada por dolores estomacales.",
                "gravedad_id" => 2
            ],
            [
                "sintoma" => "Escalofrios o vértigo",
                "descripcion" => "Sensación de escalofrío en forma de temblores atípicos.",
                "gravedad_id" => 2
            ],
            [
                "sintoma" => "Disnea (Dificultad respiratoria)",
                "descripcion" => "Gran dificultad para inhalar normalmente, clara señal de una hipoxia, se debe
                                obtener asistencia médica inmediatamente.",
                "gravedad_id" => 3
            ],
            [
                "sintoma" => "Pérdida de apetito",
                "descripcion" => "El paciente muestra una marcada reducción en su apetito.",
                "gravedad_id" => 3
            ],
            [
                "sintoma" => "Confusión",
                "descripcion" => "Sensación de desorientación espacial y temporal, puede ser causada por niveles bajos de
                                oxigenación, se debe obtener asistencia médica de inmediato.",
                "gravedad_id" => 3
            ],
            [
                "sintoma" => "Dolor o presión persistente en el pecho",
                "descripcion" => "Sensación prolongada de dolor y presión constante en el pecho, puede indicar problemar pulmonares,
                                se debe obtener asistencia médica de inmediato.",
                "gravedad_id" => 3
            ],
            [
                "sintoma" => "Alta temperatura prolongada (>38°)",
                "descripcion" => "Temperatura corporal por encima de 38 grados celsius, persistente durante largos periodos
                                    de tiempo, se debe obtener asistencia médica de inmediato.",
                "gravedad_id" => 3
            ],
            [
                "sintoma" => "Cansancio extremo",
                "descripcion" => "Imposibilidad de realizar cualquier actividad, falta de aire con cualquier esfuerzo mínimo,
                                se debe obtener asistencia médica de inmediato.",
                "gravedad_id" => 3
            ]
        ];

        foreach ($sintomas as $s) {
            S::create($s);
        }
    }
}
