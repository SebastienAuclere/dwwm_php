using System;
using System.Security.Cryptography.X509Certificates;

namespace Palindrome
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string saisie;

            Console.WriteLine("Saisir le mot");
            saisie = Console.ReadLine();

            Console.WriteLine(LePalindrome(saisie));

        }

        public static bool LePalindrome(string saisie) {


            for (int i = 0; i < saisie.Length / 2; i++)
            {
                if (saisie[i] != saisie[saisie.Length - i - 1])
                {
                    return false;
                }
            }
            return true;
        }
    }
}