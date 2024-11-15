using System;
using System.Security.Cryptography.X509Certificates;

namespace Palindrome
{
    public class Program
    {
        static void Main(string[] args)
        {
            string saisie;

            Console.WriteLine("Saisir le mot");
            saisie = Console.ReadLine();

            Console.WriteLine(LePalindrome(saisie));

        }

        public static bool LePalindrome(string saisie)
        {
            int i = 0;
            int j = 0;


            while (i < saisie.Length / 2)
            {
                if (saisie[i] == saisie[saisie.Length - i - 1])
                {
                    j++;
                }

                i++;
            }

            if (i == j)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
}