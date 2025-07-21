from flask import Flask, request, jsonify
import smtplib
from email.message import EmailMessage
import os
from dotenv import load_dotenv

# Load environment variables dari .env
load_dotenv()

# Inisialisasi app Flask
app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html') 

# 🔁 AJAX route untuk kirim email
@app.route('/kirim-ajax', methods=['POST'])
def kirim_email_ajax():
    try:
        data = request.get_json()
        nama = data['nama']
        email_pengirim = data['email']
        pesan = data['message']

        email_tujuan = os.getenv("EMAIL_APP")
        email_password = os.getenv("EMAIL_PASSWORD")

        msg = EmailMessage()
        msg['Subject'] = f'Pesan dari {nama}'
        msg['From'] = email_pengirim
        msg['To'] = email_tujuan
        msg.set_content(pesan)

        with smtplib.SMTP('smtp.gmail.com', 587) as smtp:
            smtp.starttls()
            smtp.login(email_tujuan, email_password)
            smtp.send_message(msg)

        return jsonify({'status': 'success'}), 200

    except Exception as e:
        print(f"Email gagal dikirim (AJAX): {e}")
        return jsonify({'status': 'error', 'message': str(e)}), 500

# 🚀 Jalankan server
if __name__ == '__main__':
    port = int(os.environ.get("PORT", 5000))
    app.run(debug=True, host='0.0.0.0', port=port)
