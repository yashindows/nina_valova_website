<?php

namespace App\Http\Controllers;

use App\Models\Order;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    public function sendTelegramMessage(Request $request)
    {
        $message = "Получена новая форма с данными:\n";

        $formData = $request->only('name', 'phone', 'day', 'time', 'service', 'master');

        $message .= "Имя: " . $formData['name'] . "\n";
        $message .= "Телефон: " . $formData['phone'] . "\n";
        $message .= "День: " . $formData['day'] . "\n";
        $message .= "Время: " . $formData['time'] . "\n";
        $message .= "Услуга: " . $formData['service'] . "\n";
        $message .= "Мастер: " . $formData['master'] . "\n";

        Order::create([
            'master_name' => $formData['master'],
            'procedure_time' => $formData['day'] . ' ' . $formData['time'],
        ]);

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->post('https://api.telegram.org/bot7107762213:AAFC45z0rXL9T7cecw4qss6VEb6MynPeEdI/sendMessage', ['form_params' => ['chat_id' => '-1002023301009', 'text' => $message]]);

        $status_code = $response->getStatusCode();

        // проверяем, была ли отправлена форма
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // обработка и валидация данных из формы

            // если форма успешно обработана и данные верны
            // выполните необходимые действия, например, отправку данных в базу данных

            // после успешной обработки формы перенаправляем пользователя на предыдущую страницу
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }


        return response()->json(['status' => 'success', 'message' => 'Сообщение отправлено']);
    }
}
