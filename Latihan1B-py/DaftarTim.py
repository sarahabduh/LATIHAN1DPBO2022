class DaftarTim:
    __namaTim = ""
    __negaraAsal = ""
    __tahunBerdiri = 0
    __pemain = ""
    __pemain2 = ""
    __nomor = 0
    __nomor2 = 0

    def __init__(self, namaTim, negaraAsal, tahunBerdiri, pemain, nomor, pemain2, nomor2):
        self.__namaTim = namaTim
        self.__negaraAsal = negaraAsal
        self.__tahunBerdiri = tahunBerdiri
        self.__pemain = pemain
        self.__pemain2 = pemain2
        self.__nomor = nomor
        self.__nomor2 = nomor2
    
    # Nama Tim
    def setNamaTim(self, namaTim):
        self.__namaTim = namaTim

    def getNamaTim(self):
        return self.__namaTim
    
    # Negara Asal
    def setNegaraAsal(self, negaraAsal):
        self.__negaraAsal = negaraAsal

    def getNegaraAsal(self):
        return self.__negaraAsal

    # Tahun Berdiri
    def setTahunBerdiri(self, tahunBerdiri):
        self.__tahunBerdiri = tahunBerdiri

    def getTahunBerdiri(self):
        return self.__tahunBerdiri

    # Pemain
    def setPemain(self, pemain):
        self.__pemain = pemain

    def getPemain(self):
        return self.__pemain
    
    def setPemain2(self, pemain2):
        self.__pemain2 = pemain2

    def getPemain2(self):
        return self.__pemain2

    # Nomor
    def setNomor(self, nomor):
        self.__nomor = nomor

    def getNomor(self):
        return self.__nomor
    
    def setNomor2(self, nomor2):
        self.__nomor2 = nomor2

    def getNomor2(self):
        return self.__nomor2