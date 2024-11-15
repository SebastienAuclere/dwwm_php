using System;
using System.Runtime.CompilerServices;

namespace AppCompte
{
    public class Program
    {
        static void Main(string[] args)
        {
            Compte monCompte = new Compte(200, 12345, "Aurelien", -50);
            Compte autreCompte = new Compte(100, 12345, "Tryphon", -50);
            Console.WriteLine(monCompte.EtreSuperieur(autreCompte));
        }
    }
}