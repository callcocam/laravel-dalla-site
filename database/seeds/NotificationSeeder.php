<?php

use Illuminate\Database\Seeder;
use SIGA\Notification;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Notification::class)->create([
            'type'=>'activity',
            'name'=>'Enviar-me um email quando alguém comentar sobre meu artigo'
        ]);

        factory(Notification::class)->create([
            'type'=>'activity',
            'name'=>'Enviar-me um email quando alguém responder no meu formulário'
        ]);

        factory(Notification::class)->create([
            'type'=>'activity',
            'name'=>'Envie-me um email quando alguém me seguir'
        ]);

        factory(Notification::class)->create([
            'type'=>'isncription',
            'name'=>'Notícias e anúncios',
        ]);

        factory(Notification::class)->create([
            'type'=>'isncription',
            'name'=>'Atualizações semanais do produto',
        ]);

        factory(Notification::class)->create([
            'type'=>'isncription',
            'name'=>'Resumo semanal do blog',
        ]);
    }
}
