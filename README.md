# 🤖 Voice-Controlled Robot

A web-based robot control interface that allows users to control robot movements using buttons and voice commands. The project also stores recognized voice commands in a MySQL database using PHP.

## 🌐 Live Website

🔗 https://ath.free.je/a/

## 📸 Project Preview

![Voice-Controlled Robot](photo.png)

## 📌 Project Description

This project provides a web-based control panel for a robot with two methods of control:

- 🎮 Manual control using directional buttons
- 🎤 Voice control using speech recognition

Users can control the robot using commands such as `forward`, `backward`, `left`, `right`, and `stop`.

Voice commands are converted from speech to text using the browser's **Web Speech API** and then sent to the PHP backend. The recognized commands are stored in a MySQL database.

## ✨ Features

- 🎮 Robot movement control using buttons
- 🎤 Voice command recognition
- 📝 Speech-to-text conversion
- 🌐 Web-based control interface
- 🐘 PHP backend integration
- 🗄️ MySQL database integration
- 💾 Voice command storage
- ⚡ Communication between the web interface and backend

## 🛠️ Technologies Used

- HTML
- CSS
- JavaScript
- Web Speech API
- PHP
- MySQL
- XAMPP
- phpMyAdmin

## 🎮 Robot Commands

| Control | Command |
|---|---|
| ⬆️ Forward | `forward` |
| ⬅️ Left | `left` |
| ⏹️ Stop | `stop` |
| ➡️ Right | `right` |
| ⬇️ Backward | `backward` |

## 🎤 Voice Control

The project uses the browser's **Web Speech API** to recognize spoken commands.

The process works as follows:

```text
🎤 Voice Command
      ↓
📝 Speech-to-Text
      ↓
🌐 Web Interface
      ↓
🐘 save_voice.php
      ↓
🗄️ MySQL Database
