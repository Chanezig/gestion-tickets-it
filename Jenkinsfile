pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/ton-repository.git'
            }
        }
        stage('Build') {
            steps {
                script {
                    sh 'docker-compose up -d'
                }
            }
        }
        stage('Test') {
            steps {
                script {
                    sh 'php artisan test'
                }
            }
        }
        stage('Deploy') {
            steps {
                script {
                    sh 'docker-compose down'
                    sh 'docker-compose up -d'
                }
            }
        }
    }
}
