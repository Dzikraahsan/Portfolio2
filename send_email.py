from flask import Flask, request, jsonify
import smtplib
from email.message import EmailMessage

app = Flask(__name__)

@app.route('/kirim', methods=['POST'])
def kirim_email():
    nama = request.form['nama']
    email_pengirim = request.form['email']
    pesan = request.form['message']

    email_tujuan = 'ahsandzikra@gmail.com'  # ganti ke email tujuan kamu

    msg = EmailMessage()
    msg['Subject'] = f'Pesan dari {nama}'
    msg['From'] = email_pengirim
    msg['To'] = email_tujuan
    msg.set_content(pesan)

    try:
        with smtplib.SMTP('smtp.gmail.com', 587) as smtp:
            smtp.starttls()
            smtp.login('ahsandzikra@gmail.com', 'ylxu ipxg rkkl dgtm')  # pakai app password
            smtp.send_message(msg)
        return "Pesan berhasil dikirim!"
    except Exception as e:
        return f"Gagal kirim: {e}"

if __name__ == '__main__':
    app.run(debug=True)
