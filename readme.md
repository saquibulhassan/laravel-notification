<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

#### Implementation of Supported notification channel with a custom sms channel.

For default notification channel just follow the core laravel documentation.

For custom sms channel .env must have the bellow params

```dotenv
    SLACK_WEBHOOK_URL=https://sample.webhook.url.of.slack.com
    
    SMS_API_URL=http://sms.example.com/smsapi
    SMS_API_KEY=sample_api_key
    SMS_SENDER_ID=sms_sender_id_or_mask_name
```
