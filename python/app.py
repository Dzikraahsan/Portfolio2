from flask import Flask, request, redirect, render_template, url_for
import smtplib
from email.message import EmailMessage
import os
from dotenv import load_dotenv

load_dotenv()

app = Flask(__name__, template_folder='../templates')

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/profile')
def profile():
    return render_template('profile.html')

@app.route('/project')
def project():
    return render_template('project.html')

@app.route('/kontak')
def kontak():
    return render_template('kontak.html')

@app.route('/kirim', methods=['POST'])
def kirim_email():
    nama = request.form['nama']
    email_pengirim = request.form['email']
    pesan = request.form['message']

    email_tujuan = os.getenv("EMAIL_APP")
    email_password = os.getenv("EMAIL_PASSWORD")  # Ambil dari .env / Railway

    msg = EmailMessage()
    msg['Subject'] = f'Pesan dari {nama}'
    msg['From'] = email_pengirim
    msg['To'] = email_tujuan
    msg.set_content(pesan)

    try:
        with smtplib.SMTP('smtp.gmail.com', 587) as smtp:
            smtp.starttls()
            smtp.login(email_tujuan, email_password)
            smtp.send_message(msg)
        return redirect(url_for('kontak', status='success'))
    except Exception as e:
        print(f"Email gagal dikirim: {e}")  # Buat debug log di Railway
        return redirect(url_for('kontak', status='error'))

if __name__ == '__main__':
    port = int(os.environ.get("PORT", 5000))
    app.run(debug=True, host='0.0.0.0', port=port)
