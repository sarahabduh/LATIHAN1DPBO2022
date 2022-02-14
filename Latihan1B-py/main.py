from DaftarTim import DaftarTim

Tim1 = DaftarTim("Manchester United", "Inggris", 1878, "David", 1, "Dean", 26)
Tim2 = DaftarTim("Real Madrid", "Spanyol", 1902, "Eden", 7, "Vinicius", 20)

print("+--------------------------------------+")
print("| Tim 1                                |")
print("+--------------------------------------+")
print("Nama Tim      : " + str(Tim1.getNamaTim()))
print("Negara Asal   : " + str(Tim1.getNegaraAsal()))
print("Tahun Berdiri : " + str(Tim1.getTahunBerdiri()))
print("Pemain: ")
print("- " + str(Tim1.getPemain()), "[ " + str(Tim1.getNomor()),"]")
print("- " + str(Tim1.getPemain2()), "[ " + str(Tim1.getNomor2()),"]", '\n')
print("+--------------------------------------+")
print("| Tim 2                                |")
print("+--------------------------------------+")
print("Nama Tim      : " + str(Tim2.getNamaTim()))
print("Negara Asal   : " + str(Tim2.getNegaraAsal()))
print("Tahun Berdiri : " + str(Tim2.getTahunBerdiri()))
print("Pemain: ")
print("- " + str(Tim2.getPemain()), "[ " + str(Tim2.getNomor()),"]")
print("- " + str(Tim2.getPemain2()), "[ " + str(Tim2.getNomor2()),"]")

 
